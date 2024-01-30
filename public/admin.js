// Notification
const btn = document.getElementById('Notification_btn');
const item = document.getElementById('Notification_item');

btn.addEventListener("click",()=>
{
    item.classList.toggle('hidden');
});


// profile
const profile_btn = document.getElementById('profile_btn');
const profile_item = document.getElementById('profile_item');

profile_btn.addEventListener("click",()=>
{
    profile_item.classList.toggle('hidden');
});