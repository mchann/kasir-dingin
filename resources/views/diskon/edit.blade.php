<x-app-layout>
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-semibold text-white mb-6">Edit Diskon</h1>
        <form action="{{ route('diskon.update', $diskon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_diskon" class="form-label">Nama Diskon</label>
                <input type="text" class="form-control" id="nama_diskon" name="nama_diskon" value="{{ $diskon->nama_diskon }}" required>
            </div>
            <div class="mb-4">
                <label for="persentase" class="form-label">Persentase</label>
                <input type="number" class="form-control" id="persentase" name="persentase" value="{{ $diskon->persentase }}" min="0" max="100" required>
            </div>
            <div class="mb-4">
                <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{ $diskon->tgl_mulai }}" required>
            </div>
            <div class="mb-4">
                <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="{{ $diskon->tgl_akhir }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('diskon.index') }}" class="btn btn-danger">Batal</a>
        </form>
    </div>
</x-app-layout>
