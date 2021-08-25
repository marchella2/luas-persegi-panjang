<html>
    <head>
        <title>Hitung Luas Persegi Panjang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <div class="card">
                <div class="card-header text-center">
                    Menghitung Luas Persegi Panjang
                </div>
                <div class="card-body">
                    <form action="{{ route('hasil') }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <label for="panjang" class="form-label">Panjang</label>
                            <input type="number" name="panjang" class="form-control" placeholder="Panjang" required>
                        </div>

                        <div class="form-group">
                            <label for="lebar" class="form-label">Lebar</label>
                            <input type="number" name="lebar" class="form-control" placeholder="Lebar" required>
                        </div>

                        <br>

                        <div class="form-group">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
