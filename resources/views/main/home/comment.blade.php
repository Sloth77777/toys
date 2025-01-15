{{--<div class="container my-5">--}}
{{--    <div class="comment-form p-5 bg-white shadow rounded">--}}
{{--        <h2 class="text-center mb-5 text-primary">Оставить комментарий</h2>--}}
{{--        <form action="#" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="mb-4">--}}
{{--                <label for="message" class="form-label fw-bold">Ваш комментарий</label>--}}
{{--                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Введите ваш комментарий" required></textarea>--}}
{{--            </div>--}}
{{--            <button class="py-4 btn btn-primary w-100 text-uppercase fw-bold" type="submit">--}}
{{--                Отправить--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}


{{--        @forelse($user)--}}
{{--            <label for="message_{{ $user->name }}">{{$user->name}}</label>--}}
{{--        @endforelse--}}
{{--@foreach($comments as $comment)--}}
{{--    <div class="form-group">--}}
{{--        <label for="message_{{ $comment->id }}">Комментарий</label>--}}
{{--        <span>{{ $comment->user->name ?? 'Неизвестный пользователь' }}</span> <!-- Выводим имя пользователя -->--}}
{{--        <textarea id="message_{{ $comment->id }}" name="message" rows="4" required>{{ $comment->message }}</textarea>--}}
{{--    </div>--}}
{{--@endforeach--}}
