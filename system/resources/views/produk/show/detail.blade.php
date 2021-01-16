<p>
	<!--Acessor--> {{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} gr |
	seller : {{$produk->seller->username}} |
	<!--Tanggal Produk : {{$produk->tanggal_produksi}}-->

	<!--Date Mutator-->
	<!--Tanggal Produk : {{$produk->created_at->format("d F Y")}}-->
	<!--Tanggal Produk : {{$produk->created_at->format("d M y")}}-->
	<!--Tanggal Produk : {{$produk->created_at->format("d M Y")}}-->
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>