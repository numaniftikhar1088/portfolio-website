FROM nginx:alpine

COPY index.html /usr/share/nginx/html/index.html
COPY css/ /usr/share/nginx/html/css/
COPY js/ /usr/share/nginx/html/js/
COPY images/ /usr/share/nginx/html/images/
COPY Numan_Iftikhar_Resume.pdf /usr/share/nginx/html/Numan_Iftikhar_Resume.pdf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]

