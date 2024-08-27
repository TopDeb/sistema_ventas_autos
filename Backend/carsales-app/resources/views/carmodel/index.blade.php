@extends('layout.layout')
@section('content')
    <div class="container">
        <div style="height: 20px;"></div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        Modelo del Atomovil
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label>Modelo</label>
                                <input type="text" class="form-control" name="model" id="exampleFormControlInput1"
                                    placeholder="model">
                            </div>
                            <div class="mb-3">
                                <label>Marca</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
