<?php
$team = [
    [
        "name" => "Alice Johnson",
        "role" => "Director ",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Leading with vision and integrity."
    ],
    [
        "name" => "Brian Lee",
        "role" => "HR ihome masters",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Coding the future of our platform."
    ],
    [
        "name" => "Clara Smith",
        "role" => "Marketing Head",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Spreading the word with style."
    ],
    [
        "name" => "David Kim",
        "role" => "Product Designer",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Designing delightful experiences."
    ],
    [
        "name" => "David Kim",
        "role" => "Product Designer",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Designing delightful experiences."
    ],
    [
        "name" => "David Kim",
        "role" => "Product Designer",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Designing delightful experiences."
    ],
    [
        "name" => "David Kim",
        "role" => "Product Designer",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Designing delightful experiences."
    ],
    [
        "name" => "David Kim",
        "role" => "Product Designer",
        "image" => "https://via.placeholder.com/150",
        "bio" => "Designing delightful experiences."
    ],
    
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<section class="py-16 px-4 max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
    <p class="text-lg text-gray-600 mb-12">The people behind our success.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <?php foreach ($team as $member): ?>
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-shadow">
                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>"
                     class="w-24 h-24 mx-auto rounded-full border-4 border-blue-500 mb-4">
                <h3 class="text-xl font-semibold text-gray-800"><?= $member['name'] ?></h3>
                <p class="text-blue-600 font-medium"><?= $member['role'] ?></p>
                <p class="text-sm text-gray-600 mt-2"><?= $member['bio'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

</body>
</html>
