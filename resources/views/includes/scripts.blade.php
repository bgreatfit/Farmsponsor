<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Get a specific version -->

<script src="{{asset('js/jquery.easy_number_animate.min.js')}}"></script>

<!-- jquery count down timer plugin -->
<script>
    $('.sponsor').easy_number_animate({
      start_value: 0,
      end_value: 1000,
      duration: 2000,
      delimiter: ','
    });

    $('.cycle').easy_number_animate({
      start_value: 0,
      end_value: 21,
      duration: 2000,
      delimiter: ','
    });

    $('.farms').easy_number_animate({
      start_value: 0,
      end_value: 50,
      duration: 2000,
      delimiter: ','
    });

    $('.farmers').easy_number_animate({
      start_value: 0,
      end_value: 300,
      duration: 2000,
      delimiter: ','
    });

    $('.reviews').easy_number_animate({
      start_value: 0,
      end_value: 100,
      duration: 2000,
      delimiter: ','
    });
</script>


  <!-- Toastr JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Calendar || Nice Date picker plugin caller -->
<script>
  new niceDatePicker({
    dom:document.getElementById('calendar1-wrapper2'),
    mode:'en',
    onClickDate:function(date){
        document.querySelector('.nice-date-title').innerHTML = date;
      }
  });
</script>

  <!-- custom js -->
<script src="{{asset('js/main.js')}}"></script>
