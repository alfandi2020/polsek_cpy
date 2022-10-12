 

    <!-- Core JS -->

    <!-- Data Table -->

    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js');?>"></script>
    <script src="<?= base_url('assets/vendor/libs/popper/popper.js');?>"></script>
    <script src="<?= base_url('assets/vendor/js/bootstrap.js');?>"></script>
    <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
    <script src="<?= base_url('assets/vendor/js/menu.js');?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/vendor/libs/apex-charts/apexcharts.js');?>"></script>
    
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/jquery.dataTables.js"></script><!-- xx -->
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables-bootstrap5.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables.responsive.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/responsive.bootstrap5.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables.checkboxes.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/datatables-buttons.js"></script>
  <script src="<?=  base_url() ?>assets/vendor/libs/datatables/buttons.bootstrap5.js"></script>
<script src="<?= base_url() ?>assets/custom.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url('assets/js/main.js');?>"></script>
    <!-- Page JS -->
    <script src="<?= base_url('assets/js/dashboards-analytics.js');?>"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
var base_url = '<?=base_url()?>';
  </script>

<!-- Rupiah 1 -->
  <script type="text/javascript">
	window.setTimeout(function() {
			$(".alert-success").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000);

		window.setTimeout(function() {
			$(".alert-danger").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000);
$(document).on('click', '.detail_permohonan2', function () {
    // e.preventDefault();
    var permohonan_id = this.id;
    $("#permohonanModal").on('show.bs.modal');
    // $(".detail_permohonan2").on('show.bs.modal', function () {
    //     alert('The modal is about to be shown.');
    //   });
    // console.log($("#permohonanModal").on('show.bs.modal'))
    // $("#permohonan_id").val(permohonan_id);
    // $.ajax({
    //     url: base_url + "permohonan/fetch_permohonan",
    //     type: "POST",
    //     data: {permohonan_id: permohonan_id},
    //     dataType: "html",
    //     success: function (data) {
    //         $(".mdl-permohonanModal").html(data).show();
    //         if($('#sts_sampel').val() === 'Draft'){
    //             $("#submit_sampel_form").hide();
    //         } else {
    //             $("#submit_sampel_form").show();
    //             $("#submit_sampel_form").val('Update');
    //         }
    //     }
    // });
});

	 $(document).on('click', '.modaltambahtransaksi', function (e) {
		  $('input[type="text"]').val('').attr('disabled',false)
		  $('input[type="date"]').val('').attr('disabled',false)
		  $('textarea').val('').attr('disabled',false)
	  })
		$(document).on('click', '.updatetransaksi', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modalupdatetransaksi").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_transaksi",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', false)
					$('input[name="id_transaksi"]').val(data.id_transaksi).attr('disabled', false)
					$('input[name="tanggal_masuk"]').val(data.tanggal_masuk).attr('disabled', false)
					$('input[name="barang_terjual"]').val(data.jumlah_barang_keluar).attr('disabled', false)
					$('input[name="tunai"]').val(data.tunai).attr('disabled', false)
					$('input[name="transfer"]').val(data.transfer).attr('disabled', false)
					$('input[name="pengirim_masuk"]').val(data.pengirim).attr('disabled', false)
					$('textarea[name="catatan_masuk"]').val(data.catatan_masuk).attr('disabled', false)

					$('input[name="tanggal_keluar"]').val(data.tanggal_keluar).attr('disabled', false)
					$('input[name="nominal_keluar"]').val(data.pengeluaran).attr('disabled', false)
					$('textarea[name="catatan_keluar"]').val(data.catatan_keluar).attr('disabled', false)
				}
			});
		});
		$(document).on('click', '.detailtransaksi', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modaldetailtransaksi").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_transaksi",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', true);
					$('input[name="id_transaksi"]').val(data.id_transaksi).attr('disabled', true);
					$('input[name="tanggal_masuk"]').val(data.tanggal_masuk).attr('disabled', true);
					$('input[name="barang_terjual"]').val(data.jumlah_barang_keluar).attr('disabled', true);
					$('input[name="tunai"]').val(data.tunai).attr('disabled', true);
					$('input[name="transfer"]').val(data.transfer).attr('disabled', true);
					$('input[name="pengirim_masuk"]').val(data.pengirim).attr('disabled', true);
					$('textarea[name="catatan_masuk"]').val(data.catatan_masuk).attr('disabled', true);

					$('input[name="tanggal_keluar"]').val(data.tanggal_keluar).attr('disabled', true);
					$('input[name="nominal_keluar"]').val(data.pengeluaran).attr('disabled', true);
					$('textarea[name="catatan_keluar"]').val(data.catatan_keluar).attr('disabled', true);
				}
			});
		});

		// ----------------------------------------------------------------------------------
		// ----------------------------------------------------------------------------------
		// ----------------------------------------------------------------------------------

		// Barang Baru
		$(document).on('click', '.modaltambahbarang', function (e) {
		  $('input[type="text"]').val('').attr('disabled',false)
		  $('input[type="date"]').val('').attr('disabled',false)
		  $('textarea').val('').attr('disabled',false)
	  })
		// detail barang baru
		$(document).on('click', '.detailbarangbaru', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modaldetailbarangbaru").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_barang_baru",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_barang_stok"]').val(data.id_barang_stok).attr('disabled', true)
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', true)
					$('input[name="nama_barang"]').val(data.nama_barang).attr('disabled', true)
					$('input[name="merk"]').val(data.merk).attr('disabled', true)
					$('input[name="harga"]').val(data.harga).attr('disabled', true)
					$('input[name="stok"]').val(data.stok).attr('disabled', true)
					$('textarea[name="deskripsi"]').val(data.deskripsi).attr('disabled', true);
				}
			});
		});

		// ----------------------------------------------------------------------------------
		// ----------------------------------------------------------------------------------
		// ----------------------------------------------------------------------------------

		
		// Barang Masuk
	// 	$(document).on('click', '.modaltambahbarangmasuk', function (e) {
	// 	  $('input').val('').attr('disabled',false)
	// 	  $('textarea').val('').attr('disabled',false)
	//   })

		//tambah barang masuk 
		// $(document).on('click', '.tambahbarangmasuk', function (e) {
		// 	e.preventDefault();
		// 	// var id_toko = $('select[name="id_toko"]').val();
		// 	// var tanggal_masuk = $('select[name="tanggal_masuk"]').val();
		// 	// var tanggal_masuk = $('select[name="tanggal_masuk"]').val();
		// 	$("#modaltambahbarangmasuk").modal('show');
		// 	// $("#id_transaksi").val(sam_id);
		// 	$.ajax({
		// 		url: base_url + "index/tambah_barang_masuk",
		// 		type: "POST",
		// 		data: {id: id},
		// 		dataType :'json',
		// 		success: function (data) {
		// 			$('input[name="id_toko"]').val().attr('disabled', false)
		// 			$('input[name="id_pb"]').val().attr('disabled', false)
		// 			$('input[name="tanggal_masuk"]').val().attr('disabled', false)
		// 			$('input[name="barang"]').val().attr('disabled', false)
		// 			$('input[name="jumlah"]').val().attr('disabled', false)
		// 			$('textarea[name="deskripsi"]').val().attr('disabled', false);
		// 		}
		// 	});
		// });

		$(document).on('click', '.modaltambahbarang', function (e) {
		  $('input[type="text"]').val('').attr('disabled',false)
		  $('input[type="date"]').val('').attr('disabled',false)
		  $('textarea').val('').attr('disabled',false)
	  })
		
	  $(document).on('click', '.modaltambahbarangmasuk', function (e) {
		  $('input[type="text"]').val('').attr('disabled',false)
		  $('input[type="date"]').val('').attr('disabled',false)
		  $('textarea').val('').attr('disabled',false)
	  })

		//update barang masuk 
		$(document).on('click', '.updatebarangmasuk', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modalupdatebarangmasuk").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_barang_masuk",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', false)
					$('input[name="id_pb"]').val(data.id_pb).attr('disabled', false)
					$('input[name="tanggal_masuk"]').val(data.tanggal).attr('disabled', false)
					$('input[name="barang"]').val(data.nama_barang).attr('disabled', false);
					$('input[name="jumlah"]').val(data.jumlah).attr('disabled', false)
					$('textarea[name="deskripsi"]').val(data.deskripsi).attr('disabled', false);
				}
			});
		});

		// detail barang masuk
		$(document).on('click', '.detailbarangmasuk', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modaldetailbarangmasuk").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_barang_masuk",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', true)
					$('input[name="id_pb"]').val(data.id_pb).attr('disabled', true)
					$('input[name="tanggal_masuk"]').val(data.tanggal).attr('disabled', true)
					$('input[name="barang"]').val(data.nama_barang).attr('disabled', true)
					$('input[name="jumlah"]').val(data.jumlah).attr('disabled', true)
					$('textarea[name="deskripsi"]').val(data.deskripsi).attr('disabled', true);
				}
			});
		});
		
	

		// tambah barang keluar
		$(document).on('click', '.tambahbarangkeluar', function (e) {
		  $('input[type="text"]').val('').attr('disabled',false)
		  $('input[type="date"]').val('').attr('disabled',false)
		  $('textarea').val('').attr('disabled',false)
	  })
		
		//update barang keluar 
		$(document).on('click', '.updatebarangkeluar', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modalupdatebarangkeluar").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_barang_keluar",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', false)
					$('input[name="id_pb"]').val(data.id_pb).attr('disabled', false)
					$('input[name="tanggal_keluar"]').val(data.tanggal).attr('disabled', false)
					$('input[name="barang_keluar"]').val(data.nama_barang).attr('disabled', true)
					$('input[name="jumlah_keluar"]').val(data.jumlah).attr('disabled', false)
					$('textarea[name="deskripsi_keluar"]').val(data.deskripsi).attr('disabled', false);
				}
			});
		});

		// detail barang keluar
		$(document).on('click', '.detailbarangkeluar', function (e) {
			e.preventDefault();
			var id = this.id;
			$("#modaldetailbarangkeluar").modal('show');
			// $("#id_transaksi").val(sam_id);
			$.ajax({
				url: base_url + "index/get_detail_barang_keluar",
				type: "POST",
				data: {id: id},
				dataType :'json',
				success: function (data) {
					$('input[name="id_toko"]').val(data.id_toko).attr('disabled', true)
					$('input[name="id_pb"]').val(data.id_pb).attr('disabled', true)
					$('input[name="tanggal_keluar"]').val(data.tanggal).attr('disabled', true)
					$('input[name="barang"]').val(data.nama_barang).attr('disabled', true)
					$('input[name="jumlah"]').val(data.jumlah).attr('disabled', true)
					$('textarea[name="deskripsi"]').val(data.deskripsi).attr('disabled', true);
				}
			});
		});


	</script>
  
  <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
		}
	</script>

  </body>
</html>