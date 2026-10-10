<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録画面</title>
    <style>

    </style>
</head>

<body>
    <div>
        <a href="books/index">一覧画面に戻る</a>
        <h2>登録画面</h2>
        <form method="POST" action="/books.store">
            @csrf
            <table>
                <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>著者名</th>
                        <th>評価</th>
                        <th>乾燥やメモ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">登録する</button>
        </form>

    </div>
</body>

</html>