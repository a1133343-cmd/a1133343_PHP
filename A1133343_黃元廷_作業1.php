<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2026 未來探索夏令營報名</title>

    <style>
        :root {
            --primary-color: #4facfe;
            --secondary-color: #00f2fe;
            --bg-color: #f5f7fa;
            --text-color: #333;
        }

        body {
            font-family: "PingFang TC", "Microsoft JhengHei", "Segoe UI", sans-serif;
            margin: 0;
            background: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* 頂部介紹 */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }

        .header p {
            margin-top: 10px;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* 容器通用樣式 */
        .info-card, .form-container {
            max-width: 800px;
            width: 90%;
            margin: 25px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            box-sizing: border-box;
        }

        h3 {
            border-left: 5px solid var(--primary-color);
            padding-left: 15px;
            margin-top: 0;
            color: #2c3e50;
        }

        /* 列表樣式 */
        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 8px;
        }

        /* 表單元素 */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(79, 172, 254, 0.3);
        }

        /* 單選框與勾選框優化 */
        .radio-group {
            display: flex;
            gap: 20px;
            padding: 5px 0;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            font-weight: normal;
            cursor: pointer;
        }

        .radio-group input[type="radio"] {
            margin-right: 8px;
            width: 18px;
            height: 18px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* 按鈕優化 */
        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #4facfe, #00c6ff);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 172, 254, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        /* 底部裝飾 */
        footer {
            text-align: center;
            padding: 40px;
            color: #888;
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            .header h1 { font-size: 1.8rem; }
            .info-card, .form-container { padding: 20px; }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>🏕️ 2026 未來探索夏令營</h1>
        <p>結合科技 × 冒險 × 團隊合作的五天四夜體驗！</p>
    </div>

    <div class="info-card">
        <h3>📅 活動資訊</h3>
        <p><b>時間：</b>2026年7月15日 ～ 7月19日（五天四夜）</p>
        <p><b>地點：</b>南投清境戶外教育中心</p>
        <p><b>對象：</b>國中～高中學生（12～18歲）</p>
    </div>

    <div class="info-card">
        <h3>💰 費用與優惠</h3>
        <p><b>基本費用：</b>NT$ 8,500</p>
        <ul>
            <li>✨ <b>早鳥優惠：</b>NT$ 7,500（6/1 前報名）</li>
            <li>👥 <b>團報優惠：</b>3人以上同行，每人再折 NT$ 500</li>
        </ul>
    </div>

    <div class="info-card">
        <h3>🔥 活動亮點</h3>
        <ul>
            <li>⛰️ <b>戶外冒險：</b>專業教練指導攀岩與定向越野</li>
            <li>💻 <b>科技體驗：</b>不只是玩，還能學會基礎程式邏輯</li>
            <li>🤝 <b>團隊精神：</b>精心設計的闖關關卡，培養領導力</li>
            <li>🌙 <b>星空回憶：</b>溫馨的營火晚會與星空觀測</li>
        </ul>
    </div>

    <div class="form-container">
        <h3>📝 立即報名</h3>
        <form action="submit.php" method="post">
            
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" id="name" name="name" placeholder="請輸入真實姓名" required>
            </div>

            <div class="form-group">
                <label>性別</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="男" required> 男</label>
                    <label><input type="radio" name="gender" value="女"> 女</label>
                    <label><input type="radio" name="gender" value="其他"> 其他</label>
                </div>
            </div>

            <div class="form-group">
                <label for="age">年齡</label>
                <input type="number" id="age" name="age" min="12" max="18" required>
            </div>

            <div class="form-group">
                <label for="email">電子郵件</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label for="phone">聯繫電話</label>
                <input type="tel" id="phone" name="phone" placeholder="格式：0912345678" pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
                <label>活動偏好（可複選）</label>
                <input type="checkbox" name="activities[]" value="戶外冒險"> 戶外冒險
                <input type="checkbox" name="activities[]" value="科技體驗"> 科技體驗
                <input type="checkbox" name="activities[]" value="團隊活動"> 團隊活動
                <input type="checkbox" name="activities[]" value="星空回憶"> 星空回憶
            </div>

            <div class="form-group">
                <label>餐點需求：</label>
                <select name="meal" required>
                    <option value="">請選擇</option>
                    <option value="葷食">葷食</option>
                    <option value="素食">素食</option>
                    <option value="蛋奶素">蛋奶素</option>
                </select>
            </div>

            <div class="form-group">
                <label for="note">特殊需求或備註（如飲食過敏等）</label>
                <textarea id="note" name="note" placeholder="如有過敏史或特殊健康狀況請在此註明..."></textarea>
            </div>

            <div class="form-group" style="margin-top: 30px;">
                <label style="font-weight: normal; cursor: pointer; display: flex; align-items: flex-start; gap: 10px;">
                    <input type="checkbox" name="agreement" required style="width: 18px; height: 18px; margin-top: 4px;">
                    <span>
                        我已閱讀並同意 
                        <a href="javascript:void(0)" onclick="showPolicy('safety')" style="color:#4facfe; text-decoration: underline;">活動安全條款</a>
                        與
                        <a href="javascript:void(0)" onclick="showPolicy('privacy')" style="color:#4facfe; text-decoration: underline;">個人資料蒐集聲明</a>，
                        並保證以上資料屬實。
                    </span>
                </label>
            </div>

            <button type="submit">確認送出報名 🚀</button>
        </form>
    </div>

    <footer>
        &copy; 2026 未來探索教育工作室 | 服務專線：02-2345-6789
    </footer>
    <dialog id="policyModal" style="border:none; border-radius:15px; padding:0; width:90%; max-width:600px; box-shadow:0 20px 50px rgba(0,0,0,0.3);">
    <div style="padding: 25px; max-height: 70vh; overflow-y: auto;">
        <h2 id="modalTitle" style="color:#4facfe; margin-top:0;">標題</h2>
        <div id="modalContent" style="font-size: 0.95rem; color: #444; white-space: pre-line; text-align: justify; line-height: 1.8;">
            </div>
    </div>
    <div style="padding: 15px; border-top: 1px solid #eee; text-align: right;">
        <button onclick="document.getElementById('policyModal').close()" style="width:auto; padding: 8px 25px; background:#888;">關閉視窗</button>
    </div>

    </dialog>

    <script>
        const policies = {
            safety: `【活動安全條款】
    1. 參加者須衡量自身健康狀況，若有先天性疾病（如心臟病、癲癇、嚴重過敏等）請務必於報名表備註。
    2. 活動期間須全程聽從專業教練及小隊輔指導，嚴禁擅自脫離團隊或進行危險動作。
    3. 若因不聽從工作人員指示而導致意外受傷，主辦單位將不負法律與賠償責任。
    4. 主辦單位已投保公共意外責任險，理賠範圍依保險公司合約為準。
    5. 如遇天災（颱風、地震）等不可抗力因素，主辦單位保留延期或更換室內方案之權利。`,
            
            privacy: `【個人資料蒐集聲明】
    依據個人資料保護法規定，告知以下事項：
    1. 蒐集目的：辦理 2026 夏令營之報名、保險投保、活動聯繫及後續行銷資訊發送。
    2. 資料類別：姓名、身分證字號（僅投保用）、電話、電子郵件、緊急聯絡人資訊等。
    3. 利用期間：自報名起至活動結束後一年內，保險資料依保險法規年限保存。
    4. 利用地區：僅限台灣本島。
    5. 您可隨時行使查詢、閱覽、製給複製本、補充或更正、停止蒐集處理或利用、刪除之權利。
    6. 攝影授權：活動期間之照片與影像，主辦單位可用於官網及社群媒體宣傳使用。`
        };

        function showPolicy(type) {
            const modal = document.getElementById('policyModal');
            const title = document.getElementById('modalTitle');
            const content = document.getElementById('modalContent');
            
            if(type === 'safety') {
                title.innerText = "活動安全條款";
                content.innerText = policies.safety;
            } else {
                title.innerText = "個人資料蒐集聲明";
                content.innerText = policies.privacy;
            }
            modal.showModal();
        }
    </script>

</body>
</html>