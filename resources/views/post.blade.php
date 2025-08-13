<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Feed</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-xl mx-auto">

        <!-- Post Card -->
        <div class="bg-white p-4 rounded-lg shadow-md mb-6" data-post-id="1">
            <div class="flex items-center mb-3">
                <img src="https://i.pravatar.cc/40" class="rounded-full mr-3" alt="User">
                <div>
                    <h2 class="font-semibold">John Doe</h2>
                    <p class="text-sm text-gray-500">2 hours ago</p>
                </div>
            </div>

            <p class="mb-3">Just enjoying a sunny day! 🌞</p>
            <img src="https://placekitten.com/500/300" class="rounded-lg mb-3" alt="Post image">

            <!-- Like & Comment Buttons -->
            <div class="flex space-x-6 mb-3">
                <button class="like-btn flex items-center text-gray-600 hover:text-blue-500">
                    👍 <span class="ml-1 like-count">0</span> Likes
                </button>
                <button class="comment-toggle flex items-center text-gray-600 hover:text-green-500">
                    💬 <span class="ml-1 comment-count">0</span> Comments
                </button>
            </div>

            <!-- Comment Section -->
            <div class="comment-section hidden">
                <div class="mt-2 space-y-2 comment-list"></div>
                <div class="flex mt-3">
                    <input type="text" class="comment-input flex-1 border border-gray-300 rounded-l-lg p-2" placeholder="Write a comment...">
                    <button class="add-comment bg-blue-500 text-white px-4 rounded-r-lg">Post</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function () {

            // Like Button
            $(".like-btn").click(function () {
                let countEl = $(this).find(".like-count");
                let count = parseInt(countEl.text());
                if ($(this).hasClass("liked")) {
                    countEl.text(count - 1);
                    $(this).removeClass("liked text-blue-500");
                } else {
                    countEl.text(count + 1);
                    $(this).addClass("liked text-blue-500");
                }
            });

            // Toggle Comment Section
            $(".comment-toggle").click(function () {
                $(this).closest(".bg-white").find(".comment-section").toggleClass("hidden");
            });

            // Add Comment
            $(".add-comment").click(function () {
                let parent = $(this).closest(".bg-white");
                let input = parent.find(".comment-input");
                let text = input.val().trim();
                if (text !== "") {
                    let commentList = parent.find(".comment-list");
                    commentList.append(`<p class="p-2 bg-gray-100 rounded">${text}</p>`);

                    // Update comment count
                    let countEl = parent.find(".comment-count");
                    countEl.text(parseInt(countEl.text()) + 1);

                    // SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Comment Added!',
                        text: 'Your comment has been posted.',
                        timer: 1500,
                        showConfirmButton: false
                    });

                    input.val("");
                }
            });

        });
    </script>

</body>
</html>



