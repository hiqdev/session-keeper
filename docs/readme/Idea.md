- Save for every session:
    - is it secure (user chooses)
    - browser fingerprint
    - IP address
- Session can be revalidated by
    - current fingerprint
    - IP address
- Conditions:
    - changed fingerprint - kill session, must relogin
    - changed IP:
        - the IP is secure - ok
        - the IP is unknown - kill session, must relogin

On every login from new device send notification, e.g.:
Attention! Login from new device!
