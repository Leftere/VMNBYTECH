document.getElementById('linkedin-share-button').addEventListener('click', function() {
    const pageUrl = 'vmnbytech.com' + window.location.pathname;
    console.log(pageUrl)
    const shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}`;
    window.open(shareUrl, '_blank');
});
