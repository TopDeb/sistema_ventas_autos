@extends('layout.layout')
@section('content')
    <div class="container">
        <div style="height: 20px;"></div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        Marca
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label>Nombre de la marca</label>
                                <input type="text" class="form-control" name="brand" id="exampleFormControlInput1"
                                    placeholder="Marca">
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <button type="submit" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
