<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select2 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h1 class='mt-5'>Tambah Wisata</h1>
        <form action="/wisata" method="POST" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl"
            enctype="multipart/form-data" method="POST">
            @csrf
            @foreach ($errors->all() as $error )
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            <div class='mb-2'>
                <label> Nama</label>
                <input type="text" name="nama" id="">
            </div>
            <div class='mb-2'>
                <label> Deskripsi</label>
                <input type="text" name="deskripsi" id="">
            </div>
            <div class='mb-2'>
                <label> Provinsi</label>
                <select id="selectProv" name="provinsi" class="form-select" aria-label="Default select example">

                </select>
            </div>

            <div class='mb-2'>
                <label> Regencies</label>
                <select id="selectRegenc" name="kabupaten" class="form-select" aria-label="Default select example">

                </select>
            </div>
            <div class='mb-2'>
                <label> Gambar 1</label>
                <input type="file" name="gambar">
            </div>

            <button type="submit">Tambah</button>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function(){
            $("#selectProv").select2({
                placeholder:'Pilih Provinsi',
                ajax: {
                    url: "{{route('provinsi.index')}}",
                    processResults: function({data}){
                        return {
                            results: $.map(data, function(item){
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
            $("#selectProv").change(function(){
                let id = $('#selectProv').val();
                $("#selectRegenc").select2({
                placeholder:'Pilih Wilayah',
                ajax: {
                    url: "{{url('selectRegenc')}}/"+ id,
                    processResults: function({data}){
                        return {
                            results: $.map(data, function(item){
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
            });
        });
    </script>
</body>

</html>