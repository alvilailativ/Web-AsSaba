<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madu Assaba</title>

	<!-- Aos  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css?v=<?php echo time(); ?>">

    <style>
	    html::-webkit-scrollbar {
	    	width: 1vw;
	    }

	    html::-webkit-scrollbar-thumb {
	    	background: rgb(37,37,37);
	    	border-radius: 10px;
	    }
	</style>
</head>
<body>

	<!---header section--->
	<header>
		<a href="#" class="logo">As'<span>Saba</span></a>

		<ul class="navbar">
			<li><a href="#home">Beranda</a></li>
			<li><a href="#about">Tentang</a></li>
			<li><a href="#product">Produk</a></li>
			<li><a href="#gallery">Galeri</a></li>
			<li><a href="#contact">Kontak</a></li>		
		</ul>


		<div class="h-icons">
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>

	<!---home section--->
	<section class="home" id="home">
		<div class="home-text" data-aos="fade-right" data-aos-delay="200">
			<h1>Madu<span> As`</span>Saba</h1>
			<h2>Asli & Murni</h2>
			<p>Mau beli madu yang terjamin keaslian dan kemurnianya ? <br> Cuma disni tempatnya </p>
			<a href="#product" class="btn" data-aos="fade-right" data-aos-delay="300">Lihat Produk</a>
		</div>

		<div class="home-img" data-aos="fade-left" data-aos-delay="300">
			<img src="./assets/img/foot.png">
		</div>
	</section>

	<!-- Section Abot -->
	<section class="about" id="about">
        <div class="container">

            <div class="title" data-aos="fade-up">
                <h2 class="titleText"><span>T</span>entang & <span>V</span>arian</h2>
                <p>Madu As-Saba adalah salah satu merek madu murni yang menggunakan bahan baku alami dan berkualitas tinggi yang diambil dari peternak langsung. Berkomitmen untuk memenuhi kebutuhan nutrisi keluarga, Madu As-Saba hadir dengan berbagai macam varian jenis madu</p>
            </div>

            <div class="row">
                <div class="detail">
                    <div class="row">
                    	<?php foreach($produk as $item) { ?>
                        <div class="detail-item">
                            <div class="detail-item-inner" data-aos="fade-right">
                                <i class="icon"></i>
                                <h4><?= $item['nama']; ?></h4>
                                <p><?= $item['deskripsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
	<!-- Section About End -->

	<!-- Section Product -->
	<section class="product" id="product">

		<div class="title" data-aos="fade-up">
			<h2 class="titleText"><span>P</span>roduk</h2>
			<p>Dapatkan Produknya, Rasakan Manfaatnya</p>
		</div>
	
	
		<div class="produc-content">
			<?php foreach($produk as $item) { ?>
			<div class="row" data-aos="fade-up" data-aos-delay="300">
				<img src="<?= base_url('/assets/img/') . $item['foto'] ?>">
				<div class="produc-text">               
					<h4><?= $item['nama'] ?></h4>
					<a href="<?= $item['link'] ?>" target="_blank" rel="noopener noreferrer" class="btn1">Pesan Produk</a>
				</div>
			</div>
			<?php } ?>
		</div>
	
	</section>
	<!-- Section Product End -->

	    <!-- Section Galeri -->
		<section class="gallery" id="gallery">

			<div class="title" data-aos="fade-up">
				<h2 class="titleText"><span>G</span>aleri</h2>
				<p>Sertifikat & Testimoni</p>
			</div>
	
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<?php $index = 0; foreach($galeri as $item) { ?>
						<div class="carousel-item <?= ($index === 0 ? 'active' : '') ?>">
							<img class="d-block w-100" src="<?= base_url('/assets/img/testi/') . $item['foto_galeri'] ?>">
						</div>
					<?php $index++; } ?>					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	
		</section>
		<!-- Section Galeri End -->

		<!---contact section--->
    	<section class="contact" id="contact">
			<div class="main-contact" >
				<div class="contact-content" data-aos="fade-up">
					<h4>Alamat</h4>
					<li>
						<a href="https://www.google.com/maps/search/Batik%20Residence%20B.26%20Sampiran%2C%20Kec.%20Talun%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045171%2C%20Indonesia/@-6.7659,108.5214,17z?hl=id" target="_blank">Batik Residence B.26 Sampiran, Kec. Talun, Kabupaten Cirebon, Jawa Barat 45171, Indonesia</a>
					</li>
					<li>
						<a href="https://wa.link/1kq329" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></i> +62 812-2107-8757</a>
					</li>
					<li>
						<i class="fa-solid fa-clock"></i> </i>
						Senin - Sabtu
						<p>09.00 - 18.00</p>
					</li>
				</div>
	
				<div class="contact-content" data-aos="fade-up">
					<h4>Layanan</h4>
					<li><a href="#home">Beranda</a></li>
					<li><a href="#about">Tentang</a></li>
					<li><a href="#product">Produk</a></li>
					<li><a href="#gallery">Galeri</a></li>
					<li><a href="#contact">Kontak</a></li>
				</div>
	
				<div class="contact-content" data-aos="fade-up">
					<h4>Ikuti Kami</h4>
					<li><a href="https://www.facebook.com/profile.php?id=100064370363319" target="_blank"><i class="fa-brands fa-facebook"></i> Madu Murni As-Saba</a></li>
					<li><a href="https://www.instagram.com/maduassaba/" target="_blank"><i class="fa-brands fa-square-instagram"></i> maduassaba</a></li>
				</div>
	
			</div>
		</section>

		<div class="cp">
       		<p>© 2022 As-Saba Group Nusantara</p>
    	</div>

	<!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat kami!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="klik 'Enter' untuk kirim pesan">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- <a href="#" onclick="getBotResponse('harga #1'); return false;">Harga #1</a>  -->
    <a href="javascript:getBotResponse( '<%#Eval("harga #1")%>' )" >Harga #1</a>

    <!---Swiper js link--->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<!---custom js link--->
	<script src="/assets/js/app.js"></script>
	<script type="text/javascript" src="/assets/js/script.js"></script>

	<!-- AOS Js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        AOS.init({
            duration:600,
        })
    </script>

	<script type="text/javascript">
	// Collapsible
        var coll = document.getElementsByClassName("collapsible");

        for (let i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");

                var content = this.nextElementSibling;

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }

            });
        }

        function getTime() {
            let today = new Date();
            hours = today.getHours();
            minutes = today.getMinutes();

            if (hours < 10) {
                hours = "0" + hours;
            }

            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            let time = hours + ":" + minutes;
            return time;
        }

        // Gets the first message
        function firstBotMessage() {
            let firstMessage = "Hallo, selamat datang di website As-Saba, ada yang bisa kami bantu? :)"
            let secondMessage = "kamu bisa ketik: <br> - 'harga' untuk mengetahui harga <br> - 'deskripsi' untuk mengetahui deskripsi produk <br> - 'sedia' untuk mengetahui ketersediaan produk "
            document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>' + '<p class="botText"><span>' + secondMessage + '</span></p>';

            let time = getTime();

            $("#chat-timestamp").append(time);
            document.getElementById("userInput").scrollIntoView(false);
        }

        firstBotMessage();

        // Retrieves the response
        function getHardResponse(userText) {
            let response = JSON.stringify(getBotResponse(userText));
            const myObj = JSON.parse(response);

            let botHtml = '<p class="botText"><span>' + myObj["responseText"] + '</span></p>';
            $("#chatbox").append(botHtml);

            document.getElementById("chat-bar-bottom").scrollIntoView(true);
        }

        //Gets the text text from the input box and processes it
        function getResponse() {
            let userText = $("#textInput").val();

            if (!(userText == "")) {
                let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

                $("#textInput").val("");
                $("#chatbox").append(userHtml);
                document.getElementById("chat-bar-bottom").scrollIntoView(true);

                setTimeout(() => {
                    getHardResponse(userText);
                }, 1000)
            }

        }

        // Handles sending text via button clicks
        function buttonSendText(sampleText) {
            let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

            $("#textInput").val("");
            $("#chatbox").append(userHtml);
            document.getElementById("chat-bar-bottom").scrollIntoView(true);

            //Uncomment this if you want the bot to respond to this buttonSendText event
            setTimeout(() => {
                getHardResponse(sampleText);
            }, 1000)
        }

        function sendButton() {
            getResponse();
        }

        function getBotResponse(input) {
            return $.ajax({
                url : '<?= base_url('response'); ?>',
                type : 'POST',
                data : {pesan:input},
                dataType: 'json',
                async: false
            });
        }

        // Press enter to send a message
        $("#textInput").keypress(function (e) {
            if (e.which == 13) {
                getResponse();
            }
        });
    </script>	

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>