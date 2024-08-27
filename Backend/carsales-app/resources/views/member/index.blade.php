@extends('layout.layout')
@section('content')
    <div class="container">
        <div style="height: 20px;"></div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        Miembros
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label>Nombre del miembro</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Miembro">
                            </div>
                            <div class="mb-3">
                                <label>Numero del movil</label>
                                <input type="number" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Numero del celular">
                            </div>
                            <div class="mb-3">
                                <label>Correo Electronico</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Miembro">
                            </div>
                            <div class="mb-3">
                                <label>Contraseña</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Miembro">
                            </div>
                            <div class="mb-3">
                                <label>Nombre del miembro</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Miembro">
                            </div><div class="mb-3">
                                <label>Nombre del miembro</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="Miembro">
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

    <div style="height: 20px;"></div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <table class="table table-dark table-striped">
                        <tr>
                            <td></td>
                            <td></td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
