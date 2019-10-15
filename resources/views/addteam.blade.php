@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Add Team
@endsection
@section('content2')

            <div class="container-fluid">
                <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Manage Team</h2>

                <div class="card">
                    <div class="card-body">
                            <form method="post"action="/addteams" enctype="multipart/form-data">
                                @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="affiliation">Affiliation</label>
                                    <input type="text" class="form-control" id="affiliation" placeholder="Affiliation" name="affiliation">
                                    @error('affiliation')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="committe">Committe</label>
                                    <select id="committe" class="form-control"name="committe">
                                        <option value="managing">Managing Committe</option>
                                        <option value="advisory">Advisory Committe</option>
                                        <option value="scientific">Scientific Committe</option>
                                    </select>
                                    @error('committe')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
                                    @error('designation')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" id="position" placeholder="Position" name="position">
                                    @error('position')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                               
                                    <div class="form-group">
                                        <label for="photo">Image</label>
                                        <input type="file" class="form-control-file" id="photo" name="photo">
                                        @error('photo')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    </div>
                               
                            </div>

                            <div class="text-right">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

            @endsection
