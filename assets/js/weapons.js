function Open_Weapons(BotonId) 
{
    document.querySelectorAll(".pop-up").forEach(popUp => popUp.classList.add('hidden')); // Hide all pop-ups with the new class
    document.getElementById(BotonId).classList.toggle('hidden'); // Show the pop-up with the matching ID
}