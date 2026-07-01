<?php

require_once __DIR__ . '/../../config.php';

$menu = require __DIR__ . '/menu.php';

// Unit labels shown in the sidebar
$unitLabels = [
    "unit1" => "Unit 1",
    "unit2" => "Unit 2",
    "unit3" => "Unit 3",
    "unit4" => "Unit 4",
    "unit5" => "Unit 5",
];

// Requested unit / topic
$requestedUnit = $_GET['unit'] ?? '';
$requestedSlug = $_GET['topic'] ?? $_GET['page'] ?? '';

// Default unit (fallback)
$currentUnitKey = array_key_exists($requestedUnit, $menu) ? $requestedUnit : 'unit1';

// If a topic slug was given but no valid unit, find which unit it belongs to
if ($requestedSlug !== '' && !array_key_exists($requestedUnit, $menu)) {
    foreach ($menu as $unitKey => $unitTopics) {
        foreach ($unitTopics as $topic) {
            if ($topic['slug'] === $requestedSlug) {
                $currentUnitKey = $unitKey;
                break 2;
            }
        }
    }
}

$topics = $menu[$currentUnitKey];

// Default topic within the current unit
$currentTopic = $topics[0];
$currentSlug = $currentTopic['slug'];

// Find current topic within current unit
foreach ($topics as $topic) {
    if ($topic['slug'] === $requestedSlug) {
        $currentTopic = $topic;
        $currentSlug = $topic['slug'];
        break;
    }
}

$unitNumber = preg_replace('/[^0-9]/', '', $currentUnitKey);
$contentRoot = __DIR__ . '/dsaContent';
$unitFolderCandidates = array_unique([
    $currentUnitKey,
    ucfirst($currentUnitKey),
    'Unit' . $unitNumber,
    'Unit-' . $unitNumber,
    'unit' . $unitNumber,
]);

$unitFolder = $unitFolderCandidates[0];
$contentFolders = [];
foreach (scandir($contentRoot) ?: [] as $entry) {
    if ($entry !== '.' && $entry !== '..' && is_dir($contentRoot . '/' . $entry)) {
        $contentFolders[] = $entry;
    }
}

foreach ($unitFolderCandidates as $candidate) {
    foreach ($contentFolders as $folder) {
        if (strtolower($folder) === strtolower($candidate)) {
            $unitFolder = $folder;
            break 2;
        }
    }
}

$contentPath = $contentRoot . '/' . $unitFolder . '/' . $currentTopic['file'];

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

        <aside class="md:w-64 shrink-0 sticky fixed ">

            <h2 class="text-xl font-bold mb-4">
                Data Structure & Algorithm
            </h2>

            <nav class="flex flex-col gap-2">

                <?php foreach ($menu as $unitKey => $unitTopics): ?>

                <?php
                    $isOpenUnit = ($unitKey === $currentUnitKey);
                    $unitLabel = $unitLabels[$unitKey] ?? ucfirst($unitKey);
                    ?>

                <div class="border rounded-xl overflow-hidden">

                    <button type="button"
                        class="unit-toggle w-full flex items-center justify-between px-4 py-3 font-semibold text-left transition
                                <?= $isOpenUnit ? 'bg-green-500 text-white' : 'bg-gray-50 text-gray-700 hover:bg-green-50 hover:text-green-600' ?>"
                        data-target="panel-<?= htmlspecialchars($unitKey) ?>">

                        <span><?= htmlspecialchars($unitLabel) ?></span>

                        <svg class="w-4 h-4 shrink-0 transition-transform <?= $isOpenUnit ? 'rotate-180' : '' ?>"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>

                    </button>

                    <div id="panel-<?= htmlspecialchars($unitKey) ?>"
                        class="unit-panel flex flex-col <?= $isOpenUnit ? '' : 'hidden' ?>">

                        <?php foreach ($unitTopics as $topic): ?>

                        <a href="?unit=<?= urlencode($unitKey) ?>&topic=<?= urlencode($topic['slug']) ?>" class="px-4 py-2 pl-6 text-sm border-t transition
                                        <?= ($isOpenUnit && $currentSlug === $topic['slug'])
                                            ? 'bg-green-100 text-green-700 font-medium'
                                            : 'text-gray-600 hover:bg-green-50 hover:text-green-600' ?>">

                            <?= htmlspecialchars($topic['title']) ?>

                        </a>

                        <?php endforeach; ?>

                    </div>

                </div>

                <?php endforeach; ?>

            </nav>

        </aside>

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

    <script>
    document.querySelectorAll('.unit-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var panel = document.getElementById(btn.dataset.target);
            var arrow = btn.querySelector('svg');
            panel.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });
    });
    </script>

</body>

</html>