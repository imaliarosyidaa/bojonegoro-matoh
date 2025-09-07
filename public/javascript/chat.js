const form = document.getElementById("chat-form");
const input = document.getElementById("chat-input");
const messages = document.getElementById("chat-messages");
const resetBtn = document.getElementById("chat-reset");

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const userMessage = input.value;
    messages.innerHTML += `<div><strong>You:</strong> ${userMessage}</div>`;
    input.value = "";

    const res = await fetch("/chat", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ message: userMessage }),
    });

    const data = await res.json();
    messages.innerHTML += `<div><strong>Bot:</strong> ${data.reply}</div>`;
    messages.scrollTop = messages.scrollHeight;
});

// Reset chat
if(resetBtn){
    resetBtn.addEventListener("click", async () => {
        await fetch("/chat/reset", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
        });
        messages.innerHTML = '';
    });
}
