
{{--    <div class="comment-form">--}}
{{--        <h2>Оставить комментарий</h2>--}}
{{--        <form action="{{route('comment.store',$product->id)}}" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="message">Комментарий</label>--}}
{{--                <textarea id="message" name="message" rows="4" required></textarea>--}}
{{--            </div>--}}

{{--            <button type="submit">Отправить</button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--@foreach($comments as $comment)--}}
{{--    <div class="form-group">--}}
{{--        <label for="message_{{ $comment->id }}">Комментарий</label>--}}
{{--        <span>{{ $comment->user->name ?? 'Неизвестный пользователь' }}</span> <!-- Выводим имя пользователя -->--}}
{{--        <textarea id="message_{{ $comment->id }}" name="message" rows="4" required>{{ $comment->message }}</textarea>--}}
{{--    </div>--}}
{{--@endforeach--}}
