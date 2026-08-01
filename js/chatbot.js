// Chatbot feature removed

    const fallbackResponses = [
        "I'm not sure about that. You can ask me about Numan's skills, experience, certifications, services, or availability. Or <a href='#contact' onclick='closeChatAndScroll(\"contact\")'>contact him directly</a>!",
        "That's a great question! I may not have the answer, but Numan would love to discuss it. <a href='#book-call' onclick='closeChatAndScroll(\"book-call\")'>Book a free call</a> to chat with him directly.",
        "I'm designed to answer basic questions about Numan. Try asking about his skills, projects, certifications, or how to hire him!"
    ];

    let fallbackIndex = 0;

    // DOM Elements
    const chatToggle = document.getElementById('chatToggle');
    const chatWindow = document.getElementById('chatWindow');
    const chatClose = document.getElementById('chatClose');
    const chatInput = document.getElementById('chatInput');
    const chatSend = document.getElementById('chatSend');
    const chatMessages = document.getElementById('chatMessages');
    const chatSuggestions = document.getElementById('chatSuggestions');
    const chatBadge = document.querySelector('.chatbot-badge');
    const chatIconOpen = document.getElementById('chatIconOpen');
    const chatIconClose = document.getElementById('chatIconClose');
    let isOpen = false;

    // Toggle chat window
    chatToggle.addEventListener('click', () => {
        isOpen = !isOpen;
        chatWindow.classList.toggle('open', isOpen);
        chatToggle.classList.toggle('active', isOpen);
        chatIconOpen.style.display = isOpen ? 'none' : 'block';
        chatIconClose.style.display = isOpen ? 'block' : 'none';
        if (isOpen) {
            chatBadge.style.display = 'none';
            chatInput.focus();
        }
    });

    chatClose.addEventListener('click', () => {
        isOpen = false;
        chatWindow.classList.remove('open');
        chatToggle.classList.remove('active');
        chatIconOpen.style.display = 'block';
        chatIconClose.style.display = 'none';
    });

    // Send message
    function sendMessage() {
        const text = chatInput.value.trim();
        if (!text) return;

        addMessage(text, 'user');
        chatInput.value = '';

        // Hide suggestions after first message
        if (chatSuggestions) chatSuggestions.style.display = 'none';

        // Typing indicator
        const typingDiv = document.createElement('div');
        typingDiv.className = 'chat-message bot typing-indicator';
        typingDiv.innerHTML = '<div class="chat-bubble"><span class="typing-dots"><span></span><span></span><span></span></span></div>';
        chatMessages.appendChild(typingDiv);
        scrollToBottom();

        setTimeout(() => {
            typingDiv.remove();
            const response = getResponse(text);
            addMessage(response, 'bot');
        }, 600 + Math.random() * 800);
    }

    chatSend.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
    });

    // Suggestion buttons
    document.querySelectorAll('.suggestion-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const q = btn.getAttribute('data-q');
            chatInput.value = q;
            sendMessage();
        });
    });

    // Add message to chat
    function addMessage(text, sender) {
        const msgDiv = document.createElement('div');
        msgDiv.className = `chat-message ${sender}`;
        msgDiv.innerHTML = `<div class="chat-bubble">${text}</div>`;
        chatMessages.appendChild(msgDiv);
        scrollToBottom();
    }

    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Match response from knowledge base
    function getResponse(input) {
        const lower = input.toLowerCase();

        let bestMatch = null;
        let bestScore = 0;

        for (const entry of knowledgeBase) {
            let score = 0;
            for (const kw of entry.keywords) {
                if (lower.includes(kw)) {
                    score += kw.length;
                }
            }
            if (score > bestScore) {
                bestScore = score;
                bestMatch = entry;
            }
        }

        if (bestMatch && bestScore > 0) {
            return bestMatch.response;
        }

        const response = fallbackResponses[fallbackIndex];
        fallbackIndex = (fallbackIndex + 1) % fallbackResponses.length;
        return response;
    }

    // Global function for closing chat and scrolling
    window.closeChatAndScroll = function (sectionId) {
        isOpen = false;
        chatWindow.classList.remove('open');
        chatToggle.classList.remove('active');
        chatIconOpen.style.display = 'block';
        chatIconClose.style.display = 'none';
        setTimeout(() => {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }, 300);
    };

    // Auto-open after 5 seconds on first visit
    setTimeout(() => {
        if (!isOpen && !sessionStorage.getItem('chatOpened')) {
            chatBadge.classList.add('pulse');
        }
    }, 5000);

})();
