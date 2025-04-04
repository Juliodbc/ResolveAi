<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviços Autônomos</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #007BFF, #007BFF);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #343A40;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(255, 0, 0, 0.2);
            width: 500px;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        h2 {
            color: #007BFF;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #007BFF;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 142, 207, 0.2);
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        button {
            padding: 12px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }
        .cancel-btn {
            background: #007BFF;
            color: #000000;
        }
        .submit-btn {
            background: #007BFF;
            color: rgb(0, 0, 0);
        }
        .submit-btn:hover {
            background: #007BFF;
        }
        .cancel-btn:hover {
            background: #ffafaf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📌 Cadastro de Serviços Autônomos</h2>
        <form id="serviceForm">
            <!-- Informações Básicas -->
            <div class="form-group">
                <label for="title">Título do Serviço *</label>
                <input type="text" id="title" required placeholder="Ex: Design de Logotipo Profissional">
            </div>
            <div class="form-group">
                <label for="category">Categoria *</label>
                <select id="category" required>
                    <option value="">Selecione uma categoria...</option>
                    <option value="design">Design</option>
                    <option value="programacao">Programação</option>
                    <option value="marketing">Marketing</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição *</label>
                <textarea id="description" rows="3" required placeholder="Descreva detalhadamente o serviço que você oferece..."></textarea>
            </div>
            
            <!-- Preço e Detalhes -->
            <div class="form-group">
                <label for="price">Preço (R$) *</label>
                <input type="number" id="price" required min="0" placeholder="R$ 0,00">
            </div>
            <div class="form-group">
                <label for="imageUrl">URL da Imagem (opcional)</label>
                <input type="url" id="imageUrl" placeholder="https://example.com/image.jpg">
            </div>
            <div class="form-group">
                <label for="tags">Tags (opcional)</label>
                <input type="text" id="tags" placeholder="Ex: design, logo, criativo">
            </div>
            
            <!-- Informações de Contato -->
            <div class="form-group">
                <label for="contact">Informações de Contato (opcional)</label>
                <textarea id="contact" rows="2" placeholder="Adicione informações de contato adicionais..."></textarea>
            </div>
            
            <!-- Botões -->
            <div class="button-group">
                <button type="button" class="cancel-btn">Cancelar</button>
                <button type="submit" class="submit-btn">Cadastrar Serviço</button>
            </div>
        </form>
    </div>
    
    <script>
        document.getElementById("serviceForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Serviço cadastrado com sucesso!");
        });
    </script>
</body>
</html>
