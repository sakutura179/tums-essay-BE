@extends('master')

@section('title')
    <title>Example</title>
@endsection

@section('upperScripts')
    <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
    <script src="{{ asset('ckeditor5/build/translations/vi.js') }}"></script>
@endsection

@section('css')
    <style>
        .content {
            padding: 10px;
        }

        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
@endsection

@section('content')
    <div>Example</div>
    <textarea id="editor">

    </textarea>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
@endsection

@section('lowerScripts')
    <script>
        // ckeditor
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                language: 'vi',
            } )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

        // DataTable
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>

@endsection
