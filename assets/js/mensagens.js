const sendButton = document.getElementById('sendButton');
const messageInput = document.getElementById('messageInput');
const chatBody = document.getElementById('chatBody');

sendButton.addEventListener('click', () => {
  const text = messageInput.value.trim();

  if (text !== '') {
    const newMessage = document.createElement('div');
    newMessage.classList.add('message', 'sent');
    newMessage.textContent = text;
    chatBody.appendChild(newMessage);

    messageInput.value = '';
    chatBody.scrollTop = chatBody.scrollHeight;
  }
});

messageInput.addEventListener('keypress', (e) => {
  if (e.key === 'Enter') {
    sendButton.click();
  }
});