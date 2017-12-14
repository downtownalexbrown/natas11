Here is my solution to the natas wargame's problem 11.

Using the default cookies aswell, as its encrypted response, I was able to do a known plaintext exploit to find the encryption key
That exploit happens in known-plaintext.php and prints out the encryption key
Using that encrpytion key I can place that into the encryption function from the php code on the site
Using the newly generated cookie I put it in the js console to send the cookie, giving me the password for level 12
