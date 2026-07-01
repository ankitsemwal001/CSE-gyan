<?php

require_once __DIR__ . '/../../config.php';

$menu = require __DIR__ . '/menu.php';

// Unit 1 Topics
$topics = $menu['unit1'];

// Current Topic
$requestedSlug = $_GET['topic'] ?? $_GET['page'] ?? '';

// Default Topic
$currentTopic = $topics[0];
$currentSlug = $currentTopic['slug'];

// Find Current Topic
foreach ($topics as $topic) {
    if ($topic['slug'] === $requestedSlug) {
        $currentTopic = $topic;
        $currentSlug = $topic['slug'];
        break;
    }
}


$contentPath = __DIR__ . '/dsaContent/Unit-1/' . $currentTopic['file'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($currentTopic['title']) ?> | CS Gyan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php include __DIR__ . '/../../page/header.php'; ?>

    <div class="flex flex-col md:flex-row max-w-6xl mx-auto px-4 py-10 gap-8 sticky">

        <!-- Sidebar -->
        <aside class="md:w-64 shrink-0">

            <h2 class="text-xl font-bold mb-4">
                Data Structure & Algorithm
            </h2>

            <nav class="flex flex-col border rounded-xl overflow-hidden">

                <?php foreach ($topics as $topic): ?>

                <a href="?topic=<?= urlencode($topic['slug']) ?>" class="px-4 py-3 border-b last:border-b-0 transition
                        <?= $currentSlug === $topic['slug']
                            ? 'bg-green-500 text-white'
                            : 'text-gray-700 hover:bg-green-50 hover:text-green-600' ?>">

                    <?= htmlspecialchars($topic['title']) ?>

                </a>

                <?php endforeach; ?>

            </nav>

        </aside>

        <!-- Content -->
        <main class="flex-1 prose max-w-none">

            <?php

            if (file_exists($contentPath)) {
                include $contentPath;
            } else {
                echo '<p class="text-gray-500">Content not found.</p>';
            }

            ?>

        </main>

    </div>

    <?php include __DIR__ . '/../../page/footer.php'; ?>

</body>

</html>