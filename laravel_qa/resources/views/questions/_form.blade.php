@csrf
<div class="div form-group">
    <label for="question-title">Question title</label>
    <input value ="{{ old('title', $question->title) }}" type="text" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
           <strong> {{ $errors->first('title') }} </strong>
         </div>
    @endif
</div>
<div class="div form-group">
    <label for="question-body">Explain your question</label>
    <textarea id="question-body"   class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" name="body" rows="10">{{ old('body', $question->body) }}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
           <strong> {{ $errors->first('body') }} </strong>
         </div>
    @endif
</div>
<div class="form-group">
   <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>