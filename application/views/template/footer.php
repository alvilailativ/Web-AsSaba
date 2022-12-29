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

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<!-- chatbot interface -->
	<script src="./assets/js/Chat.js"></script>
    <script src="./assets/js/app.js"></script>

	<!--chatbot script-->
	<script type="text/javascript">
		$(document).ready(function(){
			// jika tombol kirim diklik
			$("#send-btn").on("click", function(){
				// maka mengambil inputan pesan
				$pesan = $("#text-pesan").val();
				
				// lalu tampung pesan ke variable msg
				$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $pesan + '</p></div></div>'
				
				// dan masukkan msg ke form chatbot (bubble chat)
				$(".form").append($msg)
				
				// kosongkan inputan pesan setelah dikirim
				$("#text-pesan").val('');

				// ajax process
				$.ajax({
					url : '<?= base_url('response'); ?>',
					type : 'POST',
					data : {pesan:$pesan},
					success : function(result){
						// jika sukses ambil data, tampung ke variable response
						$response = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>'

						// masukkan kedalam form chat
						$(".form").append($response);

						// buat form otomatis scroll ke bawah jika ada pesan baru
						$(".form").scrollTop($(".form")[0].scrollHeight);
					}
				})
			})
		})
	</script>

	<!---swiper js link--->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<!---custom js link--->
	<script type="text/javascript" src="./assets/js/script.js"></script>

	<!-- AOS js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script> AOS.init({ duration:300, }) </script>
</body>
</html>