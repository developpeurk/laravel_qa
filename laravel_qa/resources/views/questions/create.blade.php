@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <div class="d-flex align-items-center">
                     <h2> Ask Question</h2>
                      <div class="ml-auto">
                        <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all Questions</a>
                      </div>
                  </div>
                </div>

                <div class="card-body">
                   <form action = "{{ route('questions.store') }}" method="post">
                       {{ csrf_field() }}
                       <div class="div form-group">
                           <label for="question-title">Question title</label>
                           <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invaid' : ''}}">
                           @if($errors->has('title'))
                               <div class="invalid-feedback">
                                  <strong> {{ $errors->frist('title') }} </strong>
                                </div>
                           @endif
                       </div>
                       <div class="div form-group">
                           <label for="question-body">Explain your question</label>
                           <textarea id="question-body" class="form-control {{ $errors->has('body') ? 'is-invaid' : ''}}" name="body" rows="10"></textarea>
                           @if($errors->has('body'))
                               <div class="invalid-feedback">
                                  <strong> {{ $errors->frist('body') }} </strong>
                                </div>
                           @endif
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-outline-primary btn-lg">Ask this Question</button>
                       </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
