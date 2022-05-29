<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row bg-white p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">कर्मचारी संकेत नं.</th>
                        <th scope="col">पुरा नाम</th>
                        <th scope="col">श्रेणी/तह</th>
                        <th scope="col">पद</th>
                        <th scope="col">टेलिफोन नं</th>
                        <th scope="col">ई-मेल</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>

                @php
                    $i = 1;
                @endphp

                <tbody>
                    @foreach ($staffs as $key => $staff)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            @foreach ($staff as $value)
                                <td class="value">{{ $value }}</td>
                            @endforeach
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-around">
            <div>

                @for ($i=1;$i<=$pageNo;$i++)
                    <a href="{{ route('staffMembers.list', $i) }}">{{ $i }}</a>
                @endfor
                
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row bg-white p-4" style="column-gap: 45px;">
            @foreach ($staffs as $keys => $staff)
                <div class="col-md-2">
                    <div class="card mb-3" style="width:15.5rem; height: 400px;">
                        <img src="{{ 'http://online.pis.gov.np/intranet/docprOnline/home/' . $staffs[$keys][0] }}" class="card-img-top" alt="..." style="height: 200px;">
                        
                        <div class="card-body" style="font-size: 13px;">
                            <p style="margin-top: -10px;"><b>कर्मचारी संकेत नं.</b>: {{ $staffs[$keys][1] }}</p>
                            <p style="margin-top: -10px;"><b>पुरा नाम</b>: {{ $staffs[$keys][2] }}</p>
                            <p style="margin-top: -10px;"><b>श्रेणी/तह</b>: {{ $staffs[$keys][3] }}</p>
                            <p style="margin-top: -10px;"><b>पद</b>: {{ $staffs[$keys][4] }}</p>
                            <p style="margin-top: -10px;"><b>टेलिफोन नं</b>: {{ $staffs[$keys][5] }}</p>
                            <p style="margin-top: -10px;"><b>ई-मेल</b>: {{ $staffs[$keys][6] }}</p>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
