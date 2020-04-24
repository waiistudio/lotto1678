@csrf
<div class="form-group">
    <label for="question-title">หัวข้อคำถาม</label>
    <input type="text" name="title" value=" {{ old('title',$question->title) }} " id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' :'' }}">
    @if ($errors->has('title'))
    <div class="invalid-feedback">
        <strong> {{ $errors->first('title') }} </strong>
    </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">รายละเอียดคำถาม</label>
    <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' :'' }}" rows="10" id="question-body"> {{ old('body',$question->body) }} </textarea>
    @if ($errors->has('body'))
    <div class="invalid-feedback">
        <strong> {{ $errors->first('body') }} </strong>
    </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg"> {{ $buttonText }} </button>
</div>