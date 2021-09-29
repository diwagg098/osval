@include('layout.app')
@include('layout.nav')

@section('home')
    

<div class="banner">
    <img src="{{asset('images/banner.png')}}" alt="">
</div>
<div class="katalog">
    <div class="katalog-col">
        @foreach ($content as $row)
        <div class="katalog-col1" >
            <?php
                $image = json_decode($row->picture);
            ?>
            <img src="{{ 'http://localhost/dashboard-osval/public/img/' . $image[0]}}" alt="" id="myImg" onclick="getModal({{ $loop->iteration }})">
            <div class="item">
                <div class="item1">
                    <h3>{{ $row->product_name}}</h3>
                    <h3>Rp. {{ number_format($row->price,0,',','.')}}</h3>
                </div>
                <div class="wa">
                    <a type="button" onclick="getModal({{ $loop->iteration }})"><i class="fab fa-whatsapp fa-2x"></i></a>
                </div>

                
                <div id="{{ $loop->iteration}}" class="modal">
                    <span class="close" id="{{ 'close' . $loop->iteration}}" onclick="getSpan({{ $loop->iteration}})">&times;</span>
                    
                        <div class="img001">
                            <div class="img002">
                                @foreach (json_decode($row->picture) as $images)
                                <img src="{{ 'http://localhost/dashboard-osval/public/img/' . $images}}" alt="">
                                @endforeach
                            </div>
                        </div>

                    <div id="caption">
                        <div class="caption1">
                            <label class="container">S
                                <input type="radio" name="size" value="S" onclick="getSize(this.value, {{$loop->iteration}})">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">M
                                <input type="radio" name="size" value="M" onclick="getSize(this.value, {{$loop->iteration}})">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">L
                                <input type="radio" name="size" value="L" onclick="getSize(this.value, {{$loop->iteration}})">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">XL
                                <input type="radio" name="size" value="XL" onclick="getSize(this.value, {{$loop->iteration}})">
                                <span class="checkmark"></span>
                            </label>
                            <p id="{{ 'size' . $loop->iteration}}" style="display: none">asdasds</p>
                            <p id="{{ 'product' . $loop->iteration }}" style="display: none;">{{ $row->product_name}}</p>
                            <a href="#" id="{{ 'link' . $loop->iteration}}" onclick="getLink({{ $loop->iteration}})"><i class="fab fa-whatsapp fa-2x"></i> <p >Click To Buy</p></a>
                        </div> 
                    </div>
                  </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




<footer>
    <div class="footer">
        <img src="{{asset('images/logo1.png')}}" alt="">
    </div>
    <div class="footer1">
        <a href=""><i class="fab fa-instagram fa-2x"></i></a>
    </div>
    <div class="footer3">
        <p>© 2021 Osval - Causcode_studio ALL Right Reserveds.</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function getSpan(id){

        var span = document.getElementById('close' + id);
        var modal = document.getElementById(id);
        modal.style.display = "none";
    }
</script>
<script type="text/javascript">
    function getSize(size, iteration){
        var checked_option_radio = $('input:radio[name=size]:checked').val();
        var product1 = $('#product' + iteration).text();
        $('#size' + iteration).text(size);
        var ukuran = $('#size' + iteration).text();
         document.getElementById("link" + iteration).setAttribute("href", "https://wa.me/6285735501035?text=hai%20saya%20mau%20memesan%20yang%20ini%20" + product1 + "%20" + "dengan%20ukuran%20" + ukuran); 
    }

    function getLink(iteration) {
        var product1 = $('#product' + iteration).text();
        var ukuran = $('#size' + iteration).text();

        if(product1 || ukuran == '') {
            return false;
        }
    }
</script>