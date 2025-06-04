<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Ubah jika username database berbeda
$password = ''; // Ubah jika password database berbeda
$database = 'layanan-difabel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'create') {
            $title = $_POST['title'] ?? 'Default Title';
            $text = $_POST['text'] ?? 'Default Text';
            $url = $_POST['url'] ?? null;
            $imageName = 'default.png';

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $imageName = basename($_FILES['image']['name']);
                $uploadFile = $uploadDir . $imageName;

                if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    echo '<p>Failed to upload image.</p>';
                    $imageName = 'default.png';
                }
            }

            $stmt = $conn->prepare("INSERT INTO pilihan1_posts (title, text, image, url) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $title, $text, $imageName, $url);
            if ($stmt->execute()) {
                echo '<p>Post created successfully!</p>';
            } else {
                echo '<p>Error: ' . $stmt->error . '</p>';
            }
            $stmt->close();
        } elseif ($action === 'edit') { 
            $postId = $_POST['postId'];
            $title = $_POST['title'];
            $text = $_POST['text'];
            $url = $_POST['url'] ?? null;
            $imageName = $_POST['currentImage'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $imageName = basename($_FILES['image']['name']);
                $uploadFile = $uploadDir . $imageName;

                if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    echo '<p>Failed to upload image.</p>';
                }
            }

            $stmt = $conn->prepare("UPDATE pilihan1_posts SET title = ?, text = ?, image = ?, url = ? WHERE id = ?");
            $stmt->bind_param('ssssi', $title, $text, $imageName, $url, $postId);
            if ($stmt->execute()) {
                echo '<p>Post updated successfully!</p>';
            } else {
                echo '<p>Error: ' . $stmt->error . '</p>';
            }
            $stmt->close();
        } elseif ($action === 'delete') {
            $postId = $_POST['postId'];

            $stmt = $conn->prepare("DELETE FROM pilihan1_posts WHERE id = ?");
            $stmt->bind_param('i', $postId);
            if ($stmt->execute()) {
                echo '<p>Post deleted successfully!</p>';
            } else {
                echo '<p>Error: ' . $stmt->error . '</p>';
            }
            $stmt->close();
        }
    }
}

$result = $conn->query("SELECT * FROM pilihan1_posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pilihan1</title>
    <link rel="stylesheet" href="{{ asset('css/adminn.css') }}">
</head>
<body>
    
    <h1>Manage Postingan Tunarungu</h1>

    <!-- Create New Post Form -->
    <form method="POST" action="{{ route('pilihan1.store') }}" enctype="multipart/form-data">
        @csrf
        <h2>Buat Postingan Baru</h2>
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="url">Link (URL):</label>
        <input type="text" name="url" id="url" placeholder="https://example.com" required><br><br>

        <label for="text">Deskripsi:</label>
        <textarea name="text" id="text" rows="5" required></textarea><br><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*"><br><br>

        <button type="submit">Create Post</button>
    </form>

    <!-- Display All Posts -->
    <h1>Semua Postingan Tunarungu</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <section class="content">
                <div class="text">
                    <h1>
                        <a href="{{ $post->url }}" target="_blank">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <p>{!! nl2br(e($post->text)) !!}</p>
                </div>
                <div class="image">
                    <img src="{{ asset('uploads/' . $post->image) }}" alt="">
                </div>
                <form method="POST" action="{{ route('pilihan1.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="title">Edit Judul:</label>
                    <input type="text" name="title" value="{{ $post->title }}" required><br><br>

                    <label for="url">Edit Link (URL):</label>
                    <input type="text" name="url" value="{{ $post->url }}" placeholder="https://example.com" required><br><br>

                    <label for="text">Edit Deskripsi:</label>
                    <textarea name="text" rows="5" required>{{ $post->text }}</textarea><br><br>

                    <label for="image">Change Image:</label>
                    <input type="file" name="image" accept="image/*"><br><br>

                    <button type="submit">Save Changes</button>
                </form>
                <form method="POST" action="{{ route('pilihan1.destroy', $post->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?');">Delete Post</button>
                </form>
            </section>
        @endforeach
    @else
        <p>No posts available.</p>
    @endif
</body>
</html>