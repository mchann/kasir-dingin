<x-app-layout>

            <!-- Main Content -->
            <main class="col-md-10">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <a href="{{ route('produk') }}" class="btn btn-success">Kembali</a>
                      <br>
                        <h5 class="card-title">Produk Dihapus</h5>
<br>
                        <table class="table table-dark table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Kategori</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($daftarProdukDihapus as $produk)
                                    <tr>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->stok }}</td>
                                        <td>{{ $produk->kategori->nama_kategori }}</td>
                                        <td>{{ $produk->deleted_at }}</td>
                                        <td>
                                            <form action="{{ route('produk.restore', $produk->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                
                                                <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Yakin ingin mengembalikan produk ini?')">Restore</button>
                                            </form>
                                            <form action="{{ route('produk.forceDelete', $produk->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini secara permanen?')">Delete Permanen</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
</x-app-layout>