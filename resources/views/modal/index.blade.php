@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white text-center">Laravel Bootstrap Modal Form Validation Example - NiceSnippets.com</h5>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Open Form
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    @include('modal.create')
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#formSubmit').click(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('/modal') }}",
                    method: 'post',
                    data: {
                        name: $('#name').val(),
                        auther_name: $('#auther_name').val(),
                        description: $('#description').val(),
                    },
                    success: function (result) {
                        if (result.errors) {
                            $('.alert-danger').html('');

                            $.each(result.errors, function (key, value) {
                                $('.alert-danger').show();
                                $('.alert-danger').append('<li>' + value + '</li>');
                            });
                        } else {
                            $('.alert-danger').hide();
                            $('#exampleModal').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endpush