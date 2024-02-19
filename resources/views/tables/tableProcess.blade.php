<table class="container ms-auto mt-5 table-process mb-5">
    <thead>
      <tr class="table-header text-center">
        <th scope="col" class="table-header">Nomor</th>
        <th scope="col" class="table-header">NIS Pelapor</th>
        <th scope="col" class="table-header">Kategori Aspirasi</th>
        <th scope="col" class="table-header">Aspirasi</th>
        <th scope="col" class="table-header">Lokasi Kejadian</th>
        <th scope="col" class="table-header">Keterangan</th>
        <th scope="col" class="table-header">Gambar Bukti</th>
        <th scope="col" class="table-header">Status</th>
        <th scope="col" class="table-header">Umpan Balik</th>
      </tr>
    </thead>
    <tbody >
      @forelse ($laporan as $key => $data)
      <tr class="table-content text-center">
          <td>{{ $key + 1 }}</td>
          <td>{{ $data->siswa->nis }}</td>
          <td>{{ $data->category->ket_kategori }}</td>
          <td>{{ $data->aspirasi }}</td>
          <td>{{ $data->lokasi_kejadian }}</td>
          <td>{{ $data->keterangan }}</td>
          <td>
            <img src="{{ asset($data->gambar_kejadian) }}" width="75px">
          </td>
          <td>
              <b>
                  <span class="badge rounded-pill py-2 px-4
                              @if ($data->status == 'pending') bg-danger
                              @elseif($data->status == 'progress') bg-warning
                              @elseif($data->status == 'done') bg-success @endif">
                      {{ $data->status }}
                  </span>
              </b>
          </td>
          <td>{{ $data->feedback }}</td>
      </tr>
      @empty
      @endforelse

    </tbody>
  </table>