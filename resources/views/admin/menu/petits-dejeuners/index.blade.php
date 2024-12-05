{{-- resources/views/admin/menu/petits-dejeuners/index.blade.php --}}
@extends('Admins.indexAdmin')

@section('content')
<div class="container">
    <style>
        <style>
    table th, table td {
        white-space: nowrap; /* يمنع النص من الالتفاف */
    }
    table th:nth-child(2), table td:nth-child(2) {
        max-width: 300px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
    table th:nth-child(1), table td:nth-child(1) {
        max-width: 200px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
</style>
    </style>
    <section class="mb-5"
style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
<h2 class="tit6 t-center" style="    font-size: 3rem;
text-align: center;
text-shadow: 0px 0 20px black;">
  List de Petits Dejeuners
</h2>
</section>
    <a href="{{ route('admin.menu.create-petits-dejeuner') }}" class="btn btn-primary">إضافة Petit Dejeuner</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petitsDejeuners as $petitDejeuner)
                <tr>
                    <td>{{ $petitDejeuner->nom }}</td>
                    <td>{{ $petitDejeuner->description }}</td>
                    <td>{{ $petitDejeuner->prix }} د.م</td>
                    <td><img src="{{ asset('storage/' . $petitDejeuner->image) }}" alt="Image" width="100"></td>
                    <td>
                        <a href="#" class="btn btn-danger">Suuprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
