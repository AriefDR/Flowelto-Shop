function showTime() {
    var today = new Date()
    if (today.getTimezoneOffset() == 0) (a=today.getTime() + ( 7 *60*60*1000))
    else (a=today.getTime());
    today.setTime(a);
    var tahun= today.getFullYear ();
    var hari= today.getDay ();
    var bulan= today.getMonth ();
    var tanggal= today.getDate ();
    var hariarray=new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
    var bulanarray=new Array("January","February","March","April","May","June","July","August","September","October","Nopember","Desember");
    document.getElementById("datetime").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
}
function carausel() {
    $(document).ready(function() {
        $("#myCarousel").on("slide.bs.carousel", function(e) {
          var $e = $(e.relatedTarget);
          var idx = $e.index();
          var itemsPerSlide = 3;
          var totalItems = $(".carousel-item").length;

          if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
              // append slides to end
              if (e.direction == "left") {
                $(".carousel-item")
                  .eq(i)
                  .appendTo(".carousel-inner");
              } else {
                $(".carousel-item")
                  .eq(0)
                  .appendTo($(this).find(".carousel-inner"));
              }
            }
          }
        });
      });

}
showTime()
carausel()
