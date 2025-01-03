<x-app-layout>
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-semibold text-white mb-6">Daftar Diskon</h1>

        <a href="{{ route('diskon.create') }}" class="btn btn-info mb-4">Tambah Diskon</a>

        <div class="table-responsive">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th>Nama Diskon</th>
                        <th>Persentase</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diskon as $item)
                        <tr>
                            <td>{{ $item->nama_diskon }}</td>
                            <td>{{ $item->persentase }}%</td>
                            <td>{{ $item->tgl_mulai }}</td>
                            <td>{{ $item->tgl_akhir }}</td>
                            <td>
                                <a href="{{ route('diskon.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('diskon.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus diskon ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
