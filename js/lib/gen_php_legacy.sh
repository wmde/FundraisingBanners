#!/bin/sh
# generate the legacy PGP library code in the right order
cat es6-promise.min.js base64.min.js pgp/rsa.js pgp/aes-enc.js pgp/sha1.js pgp/mouse.js pgp/PGpubkey.js pgp/PGencode.js pgp-legacy.js > pgp-legacy-libs.js
