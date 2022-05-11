const apiBaseEJ1 = 'https://api.themoviedb.org/3/';
const apiKeyEJ1 = '?api_key=7f5c5275bb71a8b18b805f40d6c31b4f';

$(document).ready(() => {
  const moviesData = getUpcomingMovies();
  const weeks = getWeeks();
  weeks.forEach((element, index) => {
    var start = new Date(element.start);
    var end = new Date(element.end);
    $('#week-select').append(`<option value="${index}">${start.getDate() + '/' + (start.getMonth() + 1)} to ${end.getDate() + '/' + (end.getMonth() + 1)}</option>`);
  });

  $('#week-select').on('change', () => {
    
    $('#movie-select').children().remove();
    $('#movie-select').append(`<option selected>Seleccione una pelicula</option>`);
    $('#no-content').removeClass('d-none');
    $('#table-info').addClass('d-none');
    var week = parseInt($('#week-select').val());
    if (!isNaN(week)) {
      var moviesThisWeek = getMovieByWeek(moviesData, week);
      moviesThisWeek.forEach((element) => {
        $('#movie-select').append(`<option value="${element.id}">${element.title}</option>`);
      });
      $('#movie-select').removeClass('d-none');
    } else {
      $('#movie-select').addClass('d-none');
    }
  });

  $('#movie-select').on('change', () => {
    if (isNaN($('#movie-select').val())) {
      $('#no-content').removeClass('d-none');
      $('#table-info').addClass('d-none');
    } else {
      clearMovie();
      $('#no-content').addClass('d-none');
      $('#table-info').removeClass('d-none');
      var id = $('#movie-select').val();
      var singleMovieUrl = `${apiBaseEJ1}movie/${id}`;
      var movieData = getJsonInfo(`${singleMovieUrl}${apiKeyEJ1}&language=en-US`);
      var relDate = new Date(movieData.release_date)
      var credits = getJsonInfo(`${singleMovieUrl}/credits${apiKeyEJ1}&language=en-US`);
      var imgurl;
      if (movieData.poster_path != null) {
        imgurl = `https://image.tmdb.org/t/p/original${movieData.poster_path}`;
      } else {
        imgurl = '../img/noimg.png';
      }
      $('#movie-img').attr('src', `${imgurl}`);
      $('#title').append(movieData.title);
      $('#title').append(` <span class="text-muted">(${relDate.getFullYear()})</span>`);
      $('#release').append(relDate.getDate() + '/' + (relDate.getMonth() + 1) + '/' + relDate.getFullYear() + ' | ');
      movieData.genres.forEach((element) => {
        $('#genres').append(`${element.name} | `);
      });
      $('#runtime').append(`${movieData.runtime} mins.`);
      $('#tagline').append(`"${movieData.tagline}"`);
      $('#overview').append(movieData.overview);
      credits.cast.slice(0, 4).forEach((element, index) => {
        var cont;
        var castimgurl;
        index % 2 == 0 ? cont = $('#cast-1') : cont = $('#cast-2');
        if (element.profile_path != null) {
          castimgurl = `https://image.tmdb.org/t/p/original${element.profile_path}`;
        } else {
          castimgurl = '../img/noimg.png';
        }
        cont.append(`<li class="list-group-item p-0" style="width: 300px;">
                                            <div class="card text-white bg-secondary">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="${castimgurl}" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body pb-0">
                                                            <h5 class="card-title">${element.name}</h5>
                                                            <p class="card-text"><small>${element.character}</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>`);
      });
    }
  });
});

function clearMovie() {
  $('#title').empty();
  $('#release').empty();
  $('#genres').empty();
  $('#runtime').empty();
  $('#tagline').empty();
  $('#overview').empty();
  $('#cast-1').children().remove();
  $('#cast-2').children().remove();
}

function getUpcomingMovies() {
  const apiUrl = `${apiBaseEJ1}movie/upcoming${apiKeyEJ1}&region=US`;
  var pages = getJsonInfo(apiUrl).total_pages;
  var allMovies = [];
  for (var i = 1; i <= pages; i++) {
    var jsonData = $.ajax({
      url: `${apiUrl}&page=${i}`,
      dataType: 'json',
      async: false
    });
    allMovies = allMovies.concat(jsonData.responseJSON.results);
  }
  return orderArray(allMovies);
}

function orderArray(param) {
  //var newArray = [].slice.call(param);
  return param.sort(function (a, b) {
    return new Date(a.release_date).getTime() - new Date(b.release_date).getTime();
  });
}

function getJsonInfo(url) {
  var jsonData = $.ajax({
    url: url,
    dataType: 'json',
    async: false
  });
  return jsonData.responseJSON;
}

function getWeeks() {
  var myWeeks = [];
  var leap = 518400000;
  var today = new Date();
  if (today.getDay() != 0) {
    start = today.getTime() - (86400000 * today.getDay());
  } else {
    start = today.getTime();
  }
  var end = start + 2332800000;
  while (start < end) {
    var week = {};
    var first = new Date(start);
    var last = new Date(start += leap);
    week.start = first.getFullYear() + '-' + (first.getMonth() + 1) + '-' + first.getDate();
    week.end = last.getFullYear() + '-' + (last.getMonth() + 1) + '-' + last.getDate();
    myWeeks.push(week);
    start += 86400000;
  }
  return myWeeks;
}

function getMovieByWeek(movies, index) {
  var weeks = getWeeks();
  var start = new Date(weeks[index].start).getTime();
  var end = new Date(weeks[index].end).getTime();
  var moviesByWeek = movies.filter((movie) => {
    release = new Date(movie.release_date).getTime();
    if (start < release && release < end) {
      return movie;
    }
  });
  return moviesByWeek;
}
