<form action="debug-form-handler.php" method="post">
  <label>
    Your Name:
    <input type="text" name="visitor_name">
  </label>
  <br><br>

  <label>
    Password:
    <input type="password" name="password">
  </label>
  <br><br>

  <label>Optional features:</label><br>

  <!-- Fixed: name="options[]" -->
  <select name="options[]" size="6" multiple>
    <option>Chat</option>
    <option>Email</option>
    <option>File transfer</option>
    <option>Directory</option>
    <option>Shell</option>
    <option>Remote control</option>
  </select>

  <br><br>
  <button type="submit">Sign Up</button>
</form>