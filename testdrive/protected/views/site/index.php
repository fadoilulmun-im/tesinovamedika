<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f6f6f6;
		}

		h1 {
			color: #1d1d1d;
			font-size: 32px;
			font-weight: bold;
			text-align: center;
			margin-top: 40px;
			margin-bottom: 50px;
			text-shadow: 2px 2px 3px rgba(0,0,0,0.3);
		}

		p {
			font-size: 16px;
			color: #666;
			margin: 20px 0;
			line-height: 1.5;
		}

		ol {
			font-size: 14px;
			color: #1d1d1d;
			margin: 20px 50px;
			padding: 0;
			list-style-type: decimal;
			line-height: 1.5;
		}

		ol li {
			margin-bottom: 10px;
		}

		ol li:last-child {
			margin-bottom: 0;
		}

		@media screen and (max-width: 767px) {
			h1 {
				font-size: 24px;
				margin-top: 30px;
				margin-bottom: 40px;
			}

			p {
				font-size: 14px;
				margin: 15px 0;
			}

			ol {
				font-size: 12px;
				margin: 15px 25px;
			}
		}
</style>

<h1>Tata Cara Pembayaran Tagihan Pasien</h1>
<p>Berikut adalah tata cara pembayaran tagihan pasien:</p>
<ol>
	<li>Pasien menerima tagihan dari rumah sakit atau klinik.</li>
	<li>Pasien memeriksa tagihan untuk memastikan bahwa semua informasi benar dan lengkap.</li>
	<li>Pasien memilih metode pembayaran yang tersedia, seperti transfer bank atau kartu kredit.</li>
	<li>Jika pasien menggunakan transfer bank, pasien mentransfer jumlah tagihan ke rekening rumah sakit atau klinik yang tercantum pada tagihan.</li>
	<li>Jika pasien menggunakan kartu kredit, pasien memasukkan informasi kartu kredit pada sistem pembayaran yang disediakan oleh rumah sakit atau klinik.</li>
	<li>Pasien menunggu konfirmasi pembayaran dari rumah sakit atau klinik.</li>
	<li>Jika pembayaran telah dikonfirmasi, pasien akan menerima bukti pembayaran sebagai tanda bahwa tagihan telah dibayar.</li>
	<li>Pasien menyimpan bukti pembayaran sebagai catatan pembayaran yang sah.</li>
</ol>