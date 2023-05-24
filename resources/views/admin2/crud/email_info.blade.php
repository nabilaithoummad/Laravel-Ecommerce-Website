@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;padding-top: 50px;">



        <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">send email to {{$data->email}}</h1>


        <form action="{{route('send_user_email',$data->id)}}" method="POST" style="margin: 60px auto;width:75%">

            @csrf

            <table class="w-100">
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="greeting" class="form-label">Greeting :</label>
                            <input type="text" class="form-control" name="greeting"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="firstline" class="form-label">Firstline :</label>
                            <input type="text" class="form-control" name="firstline"/>
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="body" class="form-label">Email body :</label>
                            <input type="text" class="form-control" name="body"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="button" class="form-label">Email Button Name :</label>
                            <input type="text" class="form-control" name="button"/>
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="url" class="form-label">Email Url :</label>
                            <input type="text" class="form-control" name="url"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label style="font-weight: bold" for="lastline" class="form-label">Email Last Line :</label>
                            <input type="text" class="form-control" name="lastline"/>
                        </div>
                    </td>
                </tr>

                <tr class="w-100">
                    <td class="w-100" colspan="2">
                        <div class="mt-4 d-flex flex-row justify-content-center ">
                            <input type="submit" class="btn btn-primary w-25" value="send"/>
                        </div>
                    </td>
                </tr>


            </table>
        </form>


</div>
@endsection
