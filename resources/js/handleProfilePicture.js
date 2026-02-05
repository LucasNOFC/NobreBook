export default function handleProfilePicture() {
    const profilePicture = document.querySelector("#profile_picture");
    const preview = document.querySelector("#preview");

    if (!profilePicture || !preview) return;

    profilePicture.addEventListener("change", function (e) {
        const file = e.target.files[0];
        if (!file) return;

        preview.src = URL.createObjectURL(file);

        preview.classList.add(
            "w-20",
            "h-20",
            "object-cover",
            "rounded-full",
            "ring-2",
            "ring-cyan-400",
        );
    });
}
