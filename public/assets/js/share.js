document.getElementById('linkedin-share-button').addEventListener('click', function() {
    const pageUrl = 'vmnbytech.com';
    const shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}`;
    window.open(shareUrl, '_blank');
});
console.log("Hello world")
document.getElementById('facebook-share-button').addEventListener('click', function() {
    const pageUrl = encodeURIComponent(window.location.href);
    const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
    window.open(shareUrl, '_blank');
});