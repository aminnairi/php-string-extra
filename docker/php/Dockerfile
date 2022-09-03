FROM php:8.0.0-alpine

ARG USER_IDENTIFIER
ARG USER_GROUP_IDENTIFIER

RUN addgroup -g $USER_IDENTIFIER -S user \
  && adduser -h /home/user -g "" -s /bin/sh -G user -SDu $USER_GROUP_IDENTIFIER user

USER user

WORKDIR /home/user

ENTRYPOINT [ "php" ]
CMD [ "--help" ]
