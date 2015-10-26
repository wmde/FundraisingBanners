#!/bin/sh
# generate the legacy PGP library code in the right order
#
# The legacy PGP library is not compatible with the base64 polyfill so we have to include two libraries for base64 encoding :(
cat es6-promise.min.js base64.min.js pgp/base64.js pgp/rsa.js pgp/aes-enc.js pgp/sha1.js pgp/mouse.js pgp/PGpubkey.js pgp/PGencode.js pgp-legacy.js > pgp-legacy-libs.js
