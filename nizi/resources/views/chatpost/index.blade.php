

<h1 class="h4 mb-4 font-weight-bold">
            投稿の新規作成
        </h1>
 
        <form method="POST" action="{{ route('chatpost.store') }}">
            @csrf
 
            <fieldset class="mb-4">
 
                <div class="form-group">
                    <label for="subject">
                        名前
                    </label>
                    <input
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        type="text"
                    >
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="subject">
                        カテゴリー
                    </label>
                    <input
                        id="chat_id"
                        name="chat_id"
                        class="form-control {{ $errors->has('chat_id') ? 'is-invalid' : '' }}"
                        value="{{ old('chat_id') }}"
                        type="text"
                    >
                    @if ($errors->has('chat_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('chat_id') }}
                        </div>
                    @endif
                </div>
 
                
 
                <div class="form-group">
                    <label for="message">
                        メッセージ
                    </label>
 
                    <textarea
                        id="message"
                        name="message"
                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
 
                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('chatpost.index') }}">
                        キャンセル
                    </a>
 
                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>
            </fieldset>
        </form>


        <div class="mt-4 mb-4">
            <p>{{ $chatposts->total() }}件が見つかりました。</p>
        </div>

        <tr>
            <th>ID</th>
            <th>作成日時</th>
            <th>チャットid</th>
            <th>名前</th>
            <th>メッセージ</th>
        </tr>
        </thead>
        <tbody id="tbl">
        @foreach ($chatposts as $chatpost)
            <tr>
                <td>{{ $chatpost->id }}</td>
                <td>{{ $chatpost->created_at->format('Y.m.d') }}</td>
                <td>{{ $chatpost->chat->id }}</td>
                <td>{{ $chatpost->name }}</td>
                <td>{{ $chatpost->message}}</td>
            </tr>
        @endforeach
        </tbody>
        <div class="d-flex justify-content-center mb-5">
            {{ $chatposts->links() }}
         </div>