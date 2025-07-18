@extends ('layout.app')

@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Penduduk</h1>
  </div>

  <form action="/resident/{{ $resident->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body bg-white mb-3">
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" id="nik" name="nik" class="form-control @error('nik') is-invalid
        @enderror" value="{{ old('nik', $resident->nik) }}">
        @error('nik')
        <span class="invalid-feedback">
        {{ $message }}
      </span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text"  id="name" name="name" class="form-control @error('name') is-invalid
        @enderror" value="{{ old('name', $resident->name) }}">
        @error('name')
        <span class="invalid-feedback">
        {{ $message }}
      </span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="gender">Jenis Kelamin</label>
        <select  id="gender" name="gender" class="form-control @error('gender') is-invalid
        @enderror">
          @foreach ([
            (object) [
              "label" => "Pilih Jenis Kelamin",
              "value" => "",
            ],
            (object) [
              "label" => "Pria",
              "value" => "Pria",
            ],
            (object) [
              "label" => "Wanita",
              "value" => "Wanita",
            ],
          ] as $item)
            <option value="{{ $item->value }}"@selected(old('gender', $resident->gender) == $item->value)>
            {{ $item->label }}</option>
          @endforeach
        </select>
        @error('gender')
        <span class="invalid-feedback">
        {{ $message }}
      </span>
        @enderror
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
        <label for="birth_place" class="form-label">Tempat Lahir</label>
        <input type="text"  id="birth_place" name="birth_place" class="form-control @error('birth_place') is-invalid
        @enderror" value="{{ old('birth_place',  $resident->birth_place) }}">
        @error('birth_place')
        <span class="invalid-feedback">
        {{ $message }}
        </span>
        @enderror
        </div>
        <div class="col-md-6 mb-3">
        <label for="birth_date" class="form-label">Tanggal Lahir</label>
        <input type="date"  id="birth_date" name="birth_date" class="form-control @error('birth_date') is-invalid
        @enderror" value="{{ old('birth_date',  $resident->birth_date) }}">
        @error('birth_date')
        <span class="invalid-feedback">
        {{ $message }}
        </span>
        @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Alamat</label>
        <textarea  id="address" name="address" rows="3" class="form-control @error('address') is-invalid
        @enderror">{{ old('address', $resident->address) }}</textarea>
        @error('address')
        <span class="invalid-feedback">
        {{ $message }}
        </span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="religion" class="form-label">Agama</label>
        <input type="text" class="form-control" value="{{ old('religion', $resident->religion) }}" id="religion" name="religion">
      </div>

      <div class="mb-3">
        <label for="marital_status">Status Perkawinan</label>
        <select  id="marital_status" name="marital_status" class="form-control @error('marital_status') is-invalid
        @enderror">
        @foreach ([
            (object) [
              "label" => "Pilih Status Perkawinan",
              "value" => "",
            ],
            (object) [
              "label" => "Belum Menikah",
              "value" => "Belum Menikah",
            ],
            (object) [
              "label" => "Menikah",
              "value" => "Menikah",
            ],
            (object) [
              "label" => "Cerai",
              "value" => "Cerai",
            ],
            (object) [
              "label" => "Janda",
              "value" => "Duda",
            ],
          ] as $item)
            <option value="{{ $item->value }}"@selected(old('marital_status', $resident->marital_status) == $item->value)>
            {{ $item->label }}</option>
          @endforeach
        </select>
        @error('marital_status')
        <span class="invalid-feedback">
        {{ $message }}
        </span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="occupation" class="form-label">Pekerjaan</label>
        <input type="text"  id="occupation" name="occupation" class="form-control" value="{{ old('occupation', $resident->occupation) }}">
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Telepon</label>
        <input type="text"  id="phone" name="phone" class="form-control" value="{{ old('phone', $resident->phone) }}">
      </div>

      <div class="mb-3">
        <label for="status">Status</label>
        <select  id="status" name="status" class="form-control @error('status') is-invalid
        @enderror">
        @foreach ([
            (object) [
              "label" => "Pilih Status",
              "value" => "",
            ],
            (object) [
              "label" => "Aktif",
              "value" => "Aktif",
            ],
            (object) [
              "label" => "Pindah",
              "value" => "Pindah",
            ],
            (object) [
              "label" => "Meninggal",
              "value" => "Meninggal",
            ],
          ] as $item)
            <option value="{{ $item->value }}"@selected(old('status', $resident->status) == $item->value)>
            {{ $item->label }}</option>
          @endforeach
        </select>
        @error('status')
        <span class="invalid-feedback">
        {{ $message }}
        </span>
        @enderror
      </div>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-end" style="gap: 10px;">
        <a href="/resident" class="btn btn-outline-secondary">Kembali</a>
        <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </div>
  </form>
@endsection